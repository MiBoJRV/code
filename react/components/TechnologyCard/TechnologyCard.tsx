import React from 'react';
import { TechnologyType } from 'src/types';
import { EmphasizedText, Heading5, TextLink } from 'src/ui-kit';

export const TechnologyCard: React.FC<TechnologyType> = ({
  text,
  emphasizedText,
  icon,
}): JSX.Element => (
  <div className="flex flex-col justify-between h-full absolute top-0 px-8 py-6 xs:px-5 xs:py-4 lg:px-[34px] lg:py-[29px]">
    <div>
      <Heading5
        fontSize="text-x1"
        fontSizeXs="xs:text-h5-mob"
        fontSizeLg="lg:text-h5"
      >
        {text}
        <EmphasizedText title={emphasizedText} />
      </Heading5>
    </div>
    <div className="flex justify-between items-end mt-auto">
      <div className="w-11 h-11 xs:w-7 xs:h-7 lg:h-12 lg:w-12">{icon}</div>
      <TextLink
        className="text-link-box xs:text-link-box-mob lg:text-link-box"
        title="Learn More"
        href="#"
      />
    </div>
  </div>
);
