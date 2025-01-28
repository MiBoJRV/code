import React, { useEffect, useState } from 'react';
import { useMedia } from 'src/hooks';
import { formatImgResponse } from 'src/helpers';
import { EmphasizedText, Heading2, PageSection, Text1 } from 'src/ui-kit';
import weteloTeamImage from 'src/assets/images/wetelo.png?w=768;1024;2000&format=webp';
import weteloTeamImageSmall from 'src/assets/images/wetelo_small.png?w=768;1024;2000&format=webp';

export const ValueSection: React.FC = (): JSX.Element => {
  const { isMediaLg } = useMedia();
  const [hideOnMobile, setHideOnMobile] = useState(false);
  useEffect(() => {
    setHideOnMobile(isMediaLg);
  }, [isMediaLg]);

  const teamImage = formatImgResponse(weteloTeamImage);
  const teamImageSmall = formatImgResponse(weteloTeamImageSmall);

  return (
    <PageSection>
      <div className="flex flex-col justify-center mx-auto ">
        <div className="text-center mx-auto max-w-full 1xl:px-36 xxl:px-0">
          <Heading2>
            We tackle challenges head-on and deliver results that truly make a
            difference
          </Heading2>
          <Text1 className="mt-10 mx-auto max-w-full sm:w-auto 1xl:px-24 xxl:px-0">
            Wetelo is driven by the
            <EmphasizedText title=" ambition " />
            to provide the best possible service, the
            <EmphasizedText title=" bravery " />
            to take on new challenges, the
            <EmphasizedText title=" zeal " />
            to exceed your expectations, and the
            <EmphasizedText title=" practicality " />
            to deliver solutions that meet your unique needs. And hey, we work
            hard to make sure that working with us is an
            <EmphasizedText title=" enjoyable experience!" />
          </Text1>
        </div>
        <div className="mt-10 mx-auto lg:mt-14">
          {!hideOnMobile ? (
            <img
              className="h-auto w-auto xs:h-[390px] xs:w-[390px]"
              srcSet={teamImageSmall?.srcSet}
              src={teamImageSmall?.src}
              alt="wetelo team"
            />
          ) : (
            <img
              srcSet={teamImage?.srcSet}
              src={teamImage?.src}
              alt="wetelo team"
            />
          )}
        </div>
      </div>
    </PageSection>
  );
};
