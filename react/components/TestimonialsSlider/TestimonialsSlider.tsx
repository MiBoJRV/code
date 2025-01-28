import React, { useEffect, useState } from 'react';
import Slider from 'react-slick';
import { useMedia } from 'src/hooks';
import { IconButton, RenderWrapper } from 'src/ui-kit';
import { TestimonialItem } from '../TestimonialItem';
import { ArrowIcon, DirectionArrowIcon } from 'src/assets/icons';
import { TESTIMOMIALS_CONFIG } from 'src/constants';

export const TestimonialsSlider: React.FC = () => {
  const [activeTestimonial, setActiveTestimonial] = useState<number>(0);
  // eslint-disable-next-line @typescript-eslint/no-unused-vars
  const [_, setSlider] = useState<Slider>();
  const [progressWidth, setProgressWidth] = useState<number>(0);
  const { isMediaXl } = useMedia();
  const testimonialsCount = TESTIMOMIALS_CONFIG.length - 1;
  const width = 100 / testimonialsCount;
  const isSliderTypeFunction = typeof Slider === 'function';

  const settings = {
    dots: isMediaXl ? false : true,
    infinite: true,
    speed: 500,
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: isMediaXl ? true : false,
    dotsClass: 'button__bar',
    prevArrow: (
      <IconButton
        icon={<ArrowIcon />}
        btnKind="xl"
        position="absolute"
        iconClassName="rotate-180"
        className="!absolute !bottom-0"
      />
    ),
    nextArrow: (
      <IconButton icon={<ArrowIcon />} btnKind="xl" position="absolute" />
    ),
    afterChange: (index: number) => setActiveTestimonial(index),
  };

  useEffect(() => {
    setProgressWidth(width * activeTestimonial);
  }, [width, activeTestimonial]);

  return (
    <RenderWrapper>
      <div>
        <div className="lg:pb-20">
          {isSliderTypeFunction ? (
            <Slider {...settings} ref={(slider: Slider) => setSlider(slider)}>
              {TESTIMOMIALS_CONFIG.map((testimonial) => (
                <TestimonialItem
                  className="mx-5 mb-5"
                  key={testimonial.id}
                  {...testimonial}
                />
              ))}
            </Slider>
          ) : (
            // eslint-disable-next-line @typescript-eslint/ban-ts-comment
            // @ts-ignore
            React.createElement(Slider.default, {
              ref: (slider: Slider) => setSlider(slider),
              ...settings,
            })
          )}
        </div>
        <div className="mx-5">
          <div className="hidden xl:flex relative w-[75%] items-center ml-auto mr-8">
            <DirectionArrowIcon className="absolute -left-[15px] stroke-blue-light" />
            <div className="relative w-full h-0.5 bg-grey">
              <div
                className={`absolute h-0.5 ml-auto mr-8 bg-blue-light`}
                style={{ width: `${progressWidth}%` }}
              />
              <div
                className="absolute -top-[13px] z-10"
                style={{ left: `${progressWidth - 1.7}%` }}
              >
                <DirectionArrowIcon className="stroke-blue-light" />
              </div>
            </div>
            <DirectionArrowIcon className="absolute -right-0.5 1xl:-right-px stroke-grey" />
          </div>
        </div>
      </div>
    </RenderWrapper>
  );
};
