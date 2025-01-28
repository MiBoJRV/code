import React from 'react';
import { MoreReviews, TestimonialsSlider } from 'src/components';
import { PageSection, Heading2, Heading5, Text1 } from 'src/ui-kit';

type TestimonialsSectionProps = {
  title?: string;
  titleClassName?: string;
  description?: string;
  isMoreReviews?: boolean;
};
export const TestimonialsSection: React.FC<TestimonialsSectionProps> = ({
  title = 'What our partners say',
  titleClassName = 'mb-8 text-center lg:mb-14',
  description,
  isMoreReviews = true,
}): JSX.Element => (
  <PageSection
    paddingTopLg="pt-0"
    className="-mx-5 xl:mx-auto xl:max-w-[1138px]"
  >
    <Heading2 title={title} className={titleClassName} />
    {description && (
      <Text1
        fontSize="text-x2-mob"
        fontSizeLg="lg:text-x1"
        className="max-w-[975px] mx-auto px-3 mb-11 text-center lg:px-0 lg:mb-[135px]"
      >
        {description}
      </Text1>
    )}
    <TestimonialsSlider />
    {isMoreReviews && (
      <>
        <Heading5
          fontSize="text-x1"
          fontSizeLg="lg:text-h5"
          title="Read more client reviews"
          className="mx-5 pt-16 pb-7 text-center sm:mx-auto"
        />
        <MoreReviews />
      </>
    )}
  </PageSection>
);
